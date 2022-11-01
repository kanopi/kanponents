# Kanponents

## CONTENTS OF THIS FILE

* Introduction
* Requirements
* Installation
* Configuration
* Maintainers

## INTRODUCTION

Library of custom paragraph types.

## REQUIREMENTS

* [Entity Reference Revisions](https://www.drupal.org/project/entity_reference_revisions)
* [Field Group](https://www.drupal.org/project/field_group)
* [Link Attributes](https://www.drupal.org/project/link_attributes)
* [Paragraphs](https://www.drupal.org/project/paragraphs)
* [Twig Field Value](https://www.drupal.org/project/paragraphs)
* [View Field](https://www.drupal.org/project/viewsreference)

## INSTALLATION

* Install the module as you normally would.
* Install an individual paragraph sub-module.
* Verify installation by visiting /admin/structure/paragraphs_type and
verifying your new Paragraph bundles are in the list.

## Contents

The main Kanponents module contains:

* Base field configuration for all sub-paragraphs (To prevent duplicates).
* Storybook setup.

Each sub module contains:

* Drupal Paragraph configuration files in the `config/optional` folder. The following are the basic files that should be present. More files may be required. The field storage files should be in the main Kanponents module.

  * core.entity_form_display.paragraph.[component].default.yml
  * core.entity_view_display.paragraph.[component].default.yml
  * field.field.paragraph.[component].[field].yml (multiple depending on the paragraph)
  * paragraphs.paragraphs_type.[component].yml

* Compiled CSS (for Drupal Library) in the `css` folder.
* Storybook data yml file in the `data` folder. (Override with Story Arguments)
* Storybook documentation MDX in the `data` folder.
* Storybook stories file in the `js` folder.
* Additional, optional Javascript files in the `js` folder.
* SCSS source (for Storybook) in the `scss` folder.
* TWIG Template file in the `templates` folder.
* Drupal info file to define the module.
* Libraries file `module.libraries.yml`.
* Modules file (if needed).

## CONFIGURATION

* Add or edit an Entity revisions, Paragraphs field.
* Check the box next to the Callout bundle to add this bundle and save.

## MAINTAINERS

Current maintainers:

* [thejimbirch](https://www.drupal.org/u/thejimbirch)

This project has been sponsored by:

* [Kanopi Studios](https://www.kanopi.com)
