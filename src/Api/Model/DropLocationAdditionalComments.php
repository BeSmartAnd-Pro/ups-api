<?php

namespace BesmartandPro\Ups\Api\Model;

class DropLocationAdditionalComments extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Container for CommentType Code and Text.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var AdditionalCommentsCommentType[]
     */
    protected $commentType;
    /**
     * Container for CommentType Code and Text.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return AdditionalCommentsCommentType[]
     */
    public function getCommentType() : array
    {
        return $this->commentType;
    }
    /**
     * Container for CommentType Code and Text.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param AdditionalCommentsCommentType[] $commentType
     *
     * @return self
     */
    public function setCommentType(array $commentType) : self
    {
        $this->initialized['commentType'] = true;
        $this->commentType = $commentType;
        return $this;
    }
}