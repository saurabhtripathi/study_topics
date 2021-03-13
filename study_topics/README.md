#### Introduction

study topics module manages blocks of a topic vocabulary

 - Creates a taxonomy vocabulary Topics via shipped configuration.
 - If a new term of topics vocabulary is added, module creates its corresponding block dynamically.
 - Places block instance into the block content region.
 - Restricts the block access only to Authenticated users.
 - Sets the appropriate cache tags for the block.
 - If new term added, module rebuilds the cache for all blocks related to topics vocabulary.

#### Developer notes
- A config has been placed in config/install folder.
- A placeholder block plugin has been used for rendering dynamically created block.
- hook_entity_presave has been used instead of deriver class to achieve block create and placement functionality.
- Custom cache tag has been added instead of using taxonomy_term_list cache tag, to be more vocab specific.

#### Local Development
1. drush en study_topics for installing.
2. drush pmu study_topics for uninstalling.

#### Testing
- Manual testing steps are as follows:
  - After enabling module check if module is enabled and has help link in extend list.
  - Check if taxonomy vocabulary Topics is created.
  - Create a new term of type Topics and check if corresponding block gets created.
  - Check if block is accessible only to Authenticated users
  - Check you do not need to clear cache after creating term, to see the corresponding block placed in content region.

#### Not in scope
- No automated test cases written for now.
- Since block and taxonomy are different entities have not handled automatic deletion of block.

#### Version Compatibility
 Drupal core
 9+, 8+

#### Maintainers

Saurabh Tripathi
