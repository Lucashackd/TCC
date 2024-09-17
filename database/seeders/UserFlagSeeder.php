<?php

namespace Database\Seeders;

use App\Models\Flag;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class UserFlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listUsers = User::all();
        $listFlags = Flag::count();

        if (!$listFlags || !$listUsers->count()) {
            throw new Exception('Error: Registrar usuários e/ou flags!');
        }

        $now = Carbon::now()->toDateTimeString();
        $createdUpdatedAt = ['created_at' => $now, 'updated_at' => $now];

        Log::channel('stderr')->info('Relacionando usuários e flags...');
        $listFlagsIds = Flag::all()->pluck('id');
        $listUsers->each(function ($user) use ($listFlagsIds, $createdUpdatedAt) {
            [$flagId, $flagId2] = $listFlagsIds->random(2);
            $user->flags()->attach([
                $flagId => $createdUpdatedAt,
                $flagId2 => $createdUpdatedAt,
            ]);
            Log::channel('stderr')->info("Usuário: $user->id | Flags: ($flagId, $flagId2)");
        });
    }
}
