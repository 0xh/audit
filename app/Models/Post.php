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
     *
     * 版本 8.0.0 带来了 AttributeModifier 合同 Auditable，在创建时改进了属性的修改方式 Audit。
     *
     * 如果AttributeRedactor设置了，则可审计转换将不起作用，因为在转换状态时无法使用编辑数据。
     *
     * 当然也可以自定义扩展 ，需实现 \OwenIt\Auditing\Contracts\AttributeEncoder 接口。
     *
     * Attribute modifiers.
     *
     * @var array
     */
    protected $attributeModifiers = [
        // 将 title 进行 base64 加密后 进行存储
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
