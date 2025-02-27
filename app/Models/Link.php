<?php

namespace App\Models;

use Database\Factories\LinkFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed $sort
 * @property User $user
 * @property string $link
 */
class Link extends Model
{
    /** @use HasFactory<LinkFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp(): void
    {
        $this->move(-1);
    }

    public function moveDown(): void
    {
        $this->move(+1);
    }

    private function move($to): void
    {
        $order = $this->sort;
        $newOrder = $order + $to;

        $swapLink = $this->user->links()->where('sort', '=', $newOrder)->first();

        $this->fill(['sort' => $newOrder])->save();
        $swapLink->fill(['sort' => $order])->save();
    }
}
