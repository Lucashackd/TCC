<?php

namespace Database\Seeders;

use App\Models\Flag;
use App\Models\Video;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class VideoFlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listVideos = Video::all();
        $listFlags = Flag::count();

        if (!$listFlags || !$listVideos->count()) {
            throw new Exception('Error: Registrar vídeos e/ou flags!');
        }

        $now = Carbon::now()->toDateTimeString();
        $createdUpdatedAt = ['created_at'=>$now, 'updated_at'=>$now];

        Log::channel('stderr')->info('Relacionando vídeos e flags...');
        $listFlagsIds = Flag::all()->pluck('id');
        $listVideos->each(function ($video) use ($listFlagsIds, $createdUpdatedAt) {
            [$flagId, $flagId2] = $listFlagsIds->random(2);
            $video->flags()->attach([
                $flagId => $createdUpdatedAt,
                $flagId2 => $createdUpdatedAt,
            ]);
            Log::channel('stderr')->info("Vídeo: $video->id | Flags: ($flagId, $flagId2)");
        });
    }
}
