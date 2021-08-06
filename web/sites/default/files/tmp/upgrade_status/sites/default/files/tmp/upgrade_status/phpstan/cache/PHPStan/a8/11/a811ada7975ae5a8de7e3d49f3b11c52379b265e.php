<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/includes/entity.inc-1628251055',
   'data' => 
  array (
    '90f56f0d8a05bb0fcadcc378e02f41b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Entity API for handling entities like nodes or users.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '89de48b706da157466dbd7ed30a4daf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Clears the entity render cache for all entity types.
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Instead,
 *   use \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::resetCache() on the
 *   required entity types or invalidate specific cache tags.
 *
 * @see https://www.drupal.org/node/3000037
 * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::resetCache()
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getDefinitions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_render_cache_clear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '23d64d0760238bb7f7afe6dc8dab41c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the entity bundle info.
 *
 * @param string|null $entity_type
 *   The entity type whose bundle info should be returned, or NULL for all
 *   bundles info. Defaults to NULL.
 *
 * @return array
 *   The bundle info for a specific entity type, or all entity types.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface::getBundleInfo() for a
 *   single bundle, or
 *   \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface::getAllBundleInfo() for
 *   all bundles.
 *
 * @see https://www.drupal.org/node/3051077
 * @see \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface::getBundleInfo()
 * @see \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface::getAllBundleInfo()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_get_bundles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7c18bcd676e03357aef9b26bdf3e64a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads an entity from the database.
 *
 * @param string $entity_type
 *   The entity type to load, e.g. node or user.
 * @param mixed $id
 *   The id of the entity to load.
 * @param bool $reset
 *   Whether to reset the internal cache for the requested entity type.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   The entity object, or NULL if there is no entity with the given ID.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity type storage\'s load() method.
 *
 * @see https://www.drupal.org/node/2266845
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '15f59597d07caa946da9e51236dbcc1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads an entity from the database.
 *
 * @param string $entity_type
 *   The entity type to load, e.g. node or user.
 * @param int $revision_id
 *   The id of the entity to load.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   The entity object, or NULL if there is no entity with the given revision
 *   id.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity type storage\'s loadRevision() method.
 *
 * @see https://www.drupal.org/node/1818376
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_revision_load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5d0e040a3d231a8c7b3b409d40e9fc7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes an entity revision.
 *
 * @param string $entity_type
 *   The entity type to load, e.g. node or user.
 * @param $revision_id
 *   The revision ID to delete.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity type storage\'s deleteRevision() method.
 *
 * @see https://www.drupal.org/node/1818376
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_revision_delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '626e74a8a291a7371df4f2f87147d37a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads multiple entities from the database.
 *
 * This function should be used whenever you need to load more than one entity
 * from the database. The entities are loaded into memory and will not require
 * database access if loaded again during the same page request.
 *
 * The actual loading is done through a class that has to implement the
 * \\Drupal\\Core\\Entity\\EntityStorageInterface interface. By default,
 * \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage is used for content entities
 * and Drupal\\Core\\Config\\Entity\\ConfigEntityStorage for config entities. Entity
 * types can specify that a different class should be used by setting the
 * "handlers[\'storage\']" key in the entity plugin annotation. These classes
 * can either implement the \\Drupal\\Core\\Entity\\EntityStorageInterface
 * interface, or, most commonly, extend the
 * \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage class. See
 * \\Drupal\\node\\Entity\\Node and \\Drupal\\node\\NodeStorage for an example.
 *
 * @param string $entity_type
 *   The entity type to load, e.g. node or user.
 * @param array $ids
 *   (optional) An array of entity IDs. If omitted, all entities are loaded.
 * @param bool $reset
 *   Whether to reset the internal cache for the requested entity type.
 *
 * @return array
 *   An array of entity objects indexed by their IDs.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity type storage\'s loadMultiple() method.
 *
 * @see https://www.drupal.org/node/2266845
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_load_multiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2c32204d98dc76cc92aae9e3b817fec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Load entities by their property values.
 *
 * @param string $entity_type
 *   The entity type to load, e.g. node or user.
 * @param array $values
 *   An associative array where the keys are the property names and the
 *   values are the values those properties must have.
 *
 * @return array
 *   An array of entity objects indexed by their IDs. Returns an empty array if
 *   no matching entities are found.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity type storage\'s loadByProperties() method.
 *
 * @see https://www.drupal.org/node/3050910
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_load_multiple_by_properties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3644e0c73df8cce3b2feefdcc891640b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads the unchanged, i.e. not modified, entity from the database.
 *
 * Unlike entity_load() this function ensures the entity is directly loaded from
 * the database, thus bypassing any static cache. In particular, this function
 * is useful to determine changes by comparing the entity being saved to the
 * stored entity.
 *
 * @param $entity_type
 *   The entity type to load, e.g. node or user.
 * @param $id
 *   The ID of the entity to load.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   The unchanged entity, or FALSE if the entity cannot be loaded.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity type storage\'s loadUnchanged() method.
 *
 * @see https://www.drupal.org/node/1935744
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_load_unchanged',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8861fd23a4e8c20e5fdfee4478c5a3a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes multiple entities permanently.
 *
 * @param string $entity_type
 *   The type of the entity.
 * @param array $ids
 *   An array of entity IDs of the entities to delete.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   the entity storage\'s \\Drupal\\Core\\Entity\\EntityStorageInterface::delete()
 *   method to delete multiple entities:
 *   @code
 *     $storage_handler = \\Drupal::entityTypeManager()->getStorage($entity_type);
 *     $entities = $storage_handler->loadMultiple($ids);
 *     $storage_handler->delete($entities);
 *   @endcode
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getStorage()
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface::loadMultiple()
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface::delete()
 * @see https://www.drupal.org/node/3051072
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_delete_multiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eb485030f8af9ac6dcfcaaad975e8f61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Constructs a new entity object, without permanently saving it.
 *
 * @param string $entity_type
 *   The type of the entity.
 * @param array $values
 *   (optional) An array of values to set, keyed by property name. If the
 *   entity type has bundles, the bundle key has to be specified.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface
 *   A new entity object.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   The method overriding Entity::create() for the entity type, e.g.
 *   \\Drupal\\node\\Entity\\Node::create() if the entity type is known. If the
 *   entity type is variable, use the entity storage\'s create() method to
 *   construct a new entity:
 *   @code
 *     \\Drupal::entityTypeManager()->getStorage($entity_type)->create($values);
 *   @endcode
 *
 * @see https://www.drupal.org/node/2266845
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getStorage()
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface::create()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6da397ddb256153d4a47a74b60326404' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the label of an entity.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity for which to generate the label.
 * @param $langcode
 *   (optional) The language code of the language that should be used for
 *   getting the label. If set to NULL, the entity\'s default language is
 *   used.
 *
 * @return string|null
 *   The label of the entity, or NULL if there is no label defined.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   entity\'s label() method.
 *
 * @see https://www.drupal.org/node/2549923
 * @see \\Drupal\\Core\\Entity\\EntityInterface::label()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_page_label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '811129b61d86b1c4735377cd6f016520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the render array for an entity.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity to be rendered.
 * @param string $view_mode
 *   The view mode that should be used to display the entity.
 * @param string $langcode
 *   (optional) For which language the entity should be rendered, defaults to
 *   the current content language.
 * @param bool $reset
 *   (optional) Whether to reset the render cache for the requested entity.
 *   Defaults to FALSE.
 *
 * @return array
 *   A render array for the entity.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use the entity view builder\'s view() method for creating a render array:
 *   @code
 *     $view_builder = \\Drupal::entityTypeManager()
 *       ->getViewBuilder($entity->getEntityTypeId());
 *     return $view_builder->view($entity, $view_mode, $langcode);
 *   @endcode
 *
 * @see https://www.drupal.org/node/3033656
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getViewBuilder()
 * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::view()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_view',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ac65b933e3c135d4f16d09bc06f4a1b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the render array for the provided entities.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   The entities to be rendered, must be of the same type.
 * @param string $view_mode
 *   The view mode that should be used to display the entity.
 * @param string $langcode
 *   (optional) For which language the entity should be rendered, defaults to
 *   the current content language.
 * @param bool $reset
 *   (optional) Whether to reset the render cache for the requested entities.
 *   Defaults to FALSE.
 *
 * @return array
 *   A render array for the entities, indexed by the same keys as the
 *   entities array passed in $entities.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use the entity view builder\'s viewMultiple() method for creating a render
 *   array for the provided entities:
 *   @code
 *     $view_builder = \\Drupal::entityTypeManager()
 *       ->getViewBuilder($entity->getEntityTypeId());
 *     return $view_builder->viewMultiple($entities, $view_mode, $langcode);
 *   @endcode
 *
 * @see https://www.drupal.org/node/3033656
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getViewBuilder()
 * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewMultiple()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_view_multiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '54500c5fc0b25288b2a31b27e067be1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the entity view display associated with a bundle and view mode.
 *
 * Use this function when assigning suggested display options for a component
 * in a given view mode. Note that they will only be actually used at render
 * time if the view mode itself is configured to use dedicated display settings
 * for the bundle; if not, the \'default\' display is used instead.
 *
 * The function reads the entity view display from the current configuration, or
 * returns a ready-to-use empty one if configuration entry exists yet for this
 * bundle and view mode. This streamlines manipulation of display objects by
 * always returning a consistent object that reflects the current state of the
 * configuration.
 *
 * Example usage:
 * - Set the \'body\' field to be displayed and the \'field_image\' field to be
 *   hidden on article nodes in the \'default\' display.
 * @code
 * entity_get_display(\'node\', \'article\', \'default\')
 *   ->setComponent(\'body\', array(
 *     \'type\' => \'text_summary_or_trimmed\',
 *     \'settings\' => array(\'trim_length\' => \'200\')
 *     \'weight\' => 1,
 *   ))
 *   ->removeComponent(\'field_image\')
 *   ->save();
 * @endcode
 *
 * @param string $entity_type
 *   The entity type.
 * @param string $bundle
 *   The bundle.
 * @param string $view_mode
 *   The view mode, or \'default\' to retrieve the \'default\' display object for
 *   this bundle.
 *
 * @return \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface
 *   The entity view display associated with the view mode.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   EntityDisplayRepositoryInterface::getViewDisplay() instead.
 *
 * @see https://www.drupal.org/node/2835616
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_get_display',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e815717223fa7920cc293958661df5c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the entity form display associated with a bundle and form mode.
 *
 * The function reads the entity form display object from the current
 * configuration, or returns a ready-to-use empty one if no configuration entry
 * exists yet for this bundle and form mode. This streamlines manipulation of
 * entity form displays by always returning a consistent object that reflects
 * the current state of the configuration.
 *
 * Example usage:
 * - Set the \'body\' field to be displayed with the \'text_textarea_with_summary\'
 *   widget and the \'field_image\' field to be hidden on article nodes in the
 *  \'default\' form mode.
 * @code
 * entity_get_form_display(\'node\', \'article\', \'default\')
 *   ->setComponent(\'body\', array(
 *     \'type\' => \'text_textarea_with_summary\',
 *     \'weight\' => 1,
 *   ))
 *   ->setComponent(\'field_image\', array(
 *     \'region\' => \'hidden\',
 *   ))
 *   ->save();
 * @endcode
 *
 * @param string $entity_type
 *   The entity type.
 * @param string $bundle
 *   The bundle.
 * @param string $form_mode
 *   The form mode.
 *
 * @return \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface
 *   The entity form display associated with the given form mode.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   EntityDisplayRepositoryInterface::getFormDisplay() instead.
 *
 * @see https://www.drupal.org/node/2835616
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface::create()
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface::load()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'entity_get_form_display',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));