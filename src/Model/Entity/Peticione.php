<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Peticione Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $destinatario
 * @property int $firmantes
 * @property string $estado
 * @property int|null $categorias_id
 * @property int|null $users_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property string $photo
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\User $user
 */
class Peticione extends Entity
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
        'titulo' => true,
        'descripcion' => true,
        'destinatario' => true,
        'firmantes' => true,
        'estado' => true,
        'categorias_id' => true,
        'users_id' => true,
        'created' => true,
        'updated' => true,
        'photo' => true,
        'categoria' => true,
        'user' => true,
    ];
}
