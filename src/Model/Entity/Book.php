<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $title
 * @property int $author
 * @property int $publisher
 * @property string $cover_pic
 * @property string $file
 * @property string $edition
 * @property \Cake\I18n\FrozenTime $added_date
 * @property int $status
 */
class Book extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'author' => true,
        'publisher' => true,
        'cover_pic' => true,
        'file' => true,
        'edition' => true,
        'added_date' => true,
        'status' => true
    ];
}
