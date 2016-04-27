<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Portfolio Entity.
 *
 * @property int $id
 * @property string $Website
 * @property string $Address
 * @property \Cake\I18n\Time $Date
 * @property string $Description
 */
class Portfolio extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
