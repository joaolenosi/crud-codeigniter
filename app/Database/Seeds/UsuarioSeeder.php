<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nome' => 'João Silva',
                'email' => 'joao.silva@example.com',
                'senha' => password_hash('senha123', PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@example.com',
                'senha' => password_hash('senha456', PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Usar Query Builder para inserir os dados
        $this->db->table('usuario')->insertBatch($data);
    }
}
