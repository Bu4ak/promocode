<?php

namespace Bu4ak\Promocode\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocode.
 */
class Promocode extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'code', 'discount', 'hash',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'updated_at',
    ];

    /**
     * @param $discount
     */
    public function setDiscountAttribute(int $discount)
    {
        $this->attributes['discount'] = ($discount > 100) ? 100 : ($discount < 1) ? 1 : $discount;
    }

    /**
     * @param int $discount
     * @param int $length
     *
     * @return $this|Model
     */
    public static function generate(int $discount = 10, int $length = 8): self
    {
        $code = substr(str_shuffle('23456789ABCDEFGHJKMNPQRSTVWXYZ'), 0, $length);
        $hash = hash('sha256', $code);

        return self::whereCode($code)->exists()
            ? self::generate($discount, $length)
            : self::create(compact('code', 'discount', 'hash'));
    }
}
