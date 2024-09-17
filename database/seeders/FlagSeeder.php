<?php

namespace Database\Seeders;

use App\Models\Flag;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            if (Flag::all()->count()) {
                Log::channel('stderr')->info('Flags table already seeded.');
                print_r((Flag::all()->pluck('title', 'id')));
                return;
            }

            $jsonPath = __DIR__ . '/flags.json';
            $jsonContent = file_get_contents($jsonPath);
            $flags = json_decode($jsonContent, true);

            if (!$flags) {
                throw new Exception('No flags found in the JSON file.');
            }

            $createdAt = Carbon::now()->toDateTimeString();
            $listFlags = [];
            foreach ($flags['data'] as $flag) {
                $listFlags[] = [
                    "title" => $flag["title"],
                    "description" => $flag["description"],
                    "created_at" => $createdAt,
                    "updated_at" => $createdAt
                ];
            }

            if (!Flag::insert($listFlags)) {
                throw new \Exception("Error inserting flags.", 1);
            }

            Log::channel('stderr')->info('Flags table seeded.');
            print_r((Flag::all()->pluck('title', 'id')));
        } catch (Exception $error) {
            throw new Exception("Erro ao processar o seed de Flags!\n {$error->getMessage()}");
        }
    }
}
