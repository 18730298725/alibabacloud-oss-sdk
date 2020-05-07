<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OSS\OSS\PutBucketTagsRequest\body;

use AlibabaCloud\SDK\OSS\OSS\tagging\tagSet;
use AlibabaCloud\Tea\Model;

class tagging extends Model
{
    /**
     * @description TagSet
     *
     * @var tagging.tagSet
     */
    public $tagSet;
    protected $_name = [
        'tagSet' => 'TagSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res           = [];
        $res['TagSet'] = null !== $this->tagSet ? $this->tagSet->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagSet'])) {
            $model->tagSet = tagSet::fromMap($map['TagSet']);
        }

        return $model;
    }
}
