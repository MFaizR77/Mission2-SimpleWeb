<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        return "Hello World";
    }

    public function table()
    {
        return "
        <table border='1' cellpadding='5'>
            <tr><th>Nama</th><th>Umur</th></tr>
            <tr><td>Ilham</td><td>20</td></tr>
            <tr><td>Budi</td><td>21</td></tr>
        </table>
    ";
    }

    public function tableLoop()
    {
        $data = [
            ["Faiz", 20],
            ["Budi", 21],
            ["Siti", 22],
            ["ilham", 23]
        ];

        $html = "<table border='1' cellpadding='5'>";
        $html .= "<tr><th>Nama</th><th>Umur</th></tr>";
        foreach ($data as $row) {
            $html .= "<tr><td>{$row[0]}</td>
                     <td>{$row[1]}</td></tr>";
        }
        $html .= "</table>";

        return $html;
    }


}