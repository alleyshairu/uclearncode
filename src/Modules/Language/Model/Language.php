<?php

namespace Uc\Modules\Language\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property string  $title
 * @property string  $logo
 * @property string  $color
 * @property string  $website
 * @property ?string $description
 */
class Language extends Model
{
    protected $table = 'languages';

    protected $dateFormat = 'Y-m-d H:i:s';

    public function id(): string
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function color(): string
    {
        return $this->color;
    }

    public function logo(): string
    {
        return $this->logo;
    }
}
