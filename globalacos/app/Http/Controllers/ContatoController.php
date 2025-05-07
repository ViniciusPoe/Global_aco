<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Storage;

class ContatoController extends Controller
{
    public function enviar(Request $request)
{
    // Validação dos dados recebidos
    $data = $request->validate([
        'nome' => 'required|string|max:100',
        'empresa' => 'nullable|string|max:100',
        'email' => 'required|email',
        'telefone' => 'required|string',
        'assunto' => 'required|string',
        'mensagem' => 'required|string',
    ]);

    // Enviar e-mail
    Mail::to(config('mail.from.address'))->send(new ContatoMail($data));

    // Dados filtrados para planilha
    $filteredData = [
        'nome' => $data['nome'],
        'telefone' => $data['telefone'],
        'email' => $data['email'],
        'empresa' => $data['empresa'] ?? '',
    ];

    // Caminho do arquivo
    $filename = 'contatos.xlsx';
    $filepath = storage_path("app/public/$filename");

    // Se o arquivo já existir
    if (file_exists($filepath)) {
        $spreadsheet = IOFactory::load($filepath);
        $sheet = $spreadsheet->getActiveSheet();
    } else {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray(['Nome', 'Telefone', 'Email', 'Empresa'], null, 'A1');
    }

    // Verificação: e-mail já existe?
    $highestRow = $sheet->getHighestRow();
    $emailExiste = false;

    for ($row = 2; $row <= $highestRow; $row++) {
        $emailNaLinha = $sheet->getCell("C$row")->getValue();
        if (strtolower(trim($emailNaLinha)) === strtolower(trim($data['email']))) {
            $emailExiste = true;
            break;
        }
    }

    if ($emailExiste) {
        return back()->with('info', 'Este e-mail já está cadastrado.');
    }

    // Se não existir, adiciona à próxima linha
    $nextRow = $sheet->getHighestRow() + 1;
    $sheet->fromArray(array_values($filteredData), null, "A$nextRow");

    // Salva
    $writer = new Xlsx($spreadsheet);
    $writer->save($filepath);

    return back()->with('success', 'Mensagem enviada e salva com sucesso!');
}

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        $filename = 'contatos.xlsx';
        $filepath = storage_path("app/public/$filename");

        if (file_exists($filepath)) {
            $spreadsheet = IOFactory::load($filepath);
            $sheet = $spreadsheet->getSheet(0); // Primeira aba (Contatos)
            $row = $sheet->getHighestRow() + 1;
        } else {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setTitle('Contatos');

            // Cabeçalhos
            $sheet->fromArray(['Nome', 'Telefone', 'Email', 'Empresa'], null, 'A1');
            $row = 2;
        }

        $highestRow = $sheet->getHighestRow();
        $emailExiste = false;

        for ($row = 2; $row <= $highestRow; $row++) {
            $emailNaLinha = $sheet->getCell("C$row")->getValue();
            if (strtolower(trim($emailNaLinha)) === strtolower(trim($data['email']))) {
                $emailExiste = true;
                break;
            }
        }
    
        if ($emailExiste) {
            return back()->with('info', 'Este e-mail já está cadastrado.');
        }

        // Insere apenas o e-mail, outras colunas ficam vazias
        $row = $highestRow + 1;
        $sheet->fromArray(['', '', $data['email'], ''], null, "A{$row}");

        // Salva a planilha
        $writer = new Xlsx($spreadsheet);
        $writer->save($filepath);

        return back()->with('success', 'Email cadastrado com sucesso!');
    }
}
