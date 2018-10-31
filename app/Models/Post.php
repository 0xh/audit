<?php

namespace App\Models;

use OwenIt\Auditing\Encoders\Base64Encoder;

class Post extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'content',
        'word_count',
    ];

    /**
     * 如果AttributeRedactor设置了，则可审计转换将不起作用，因为在转换状态时无法使用编辑数据
     *
     * Attribute modifiers.
     *
     * @var array
     */
    protected $attributeModifiers = [
        'title' => Base64Encoder::class,
    ];

    /**
     * 如果需要，Audit可以在存储之前转换数据。
     *
     * @param array $data
     *
     * @return array
     */
    //public function transformAudit(array $data): array
    //{
    //    if (array_has($data, 'new_values.title')) {
    //        $data['old_values']['title'] = '旧:'.$this->getOriginal('title');
    //        $data['new_values']['title'] = '新:'.$this->getAttribute('title') ;
    //    }
    //
    //    return $data;
    //}
    
}
