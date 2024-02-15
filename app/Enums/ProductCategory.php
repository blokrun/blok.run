<?php

namespace App\Enums;


use App\Models\ProductCategory;

enum ProductCategoryEnum: string
{
    use EnumTrait;

    public static function values(): array
    {
        return ProductCategory::pluck('name', 'id')->toArray();
    }

    public function title(): string
    {
        $values = self::values();

        return $values[$this->value] ?? $this->value;
    }
}