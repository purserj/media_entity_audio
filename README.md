## About Media entity

Media entity provides a 'base' entity for a media element. This is a very basic
entity which can reference to all kinds of media-objects (local files, YouTube
videos, tweets, CDN-files, ...). This entity only provides a relation between
Drupal (because it is an entity) and the resource. You can reference to this
entity within any other Drupal entity.

## About Media entity audio

This module provides audio files integration for Media entity (i.e. media type
provider plugin).

Project page: http://drupal.org/project/media_entity_audio

Maintainers:
 - Janez Urevc (@slashrsm) drupal.org/user/744628

IRC channel: #drupal-media
=======
# Media_entity_audio
Media entity support for audio file

##Dependencies
- [Media entity] (http://drupal.org/project/media_entity)

##Configuration

a) Install media_entity_audio module

b) Go to admin/structure/media/manage/audio/display and change format to "Media file formatter". 

c) Add new media from /media/add link



##@Todo 

1) Mising support for filetypes other than mp3

2) Support with media players.
