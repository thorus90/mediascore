#!/bin/env python3

symlinks = [
	(sdir + '/Controller/MediascoresController.php', cakedir + '/Controller/MediascoresController.php'),
	(sdir + '/Model/Entity/Mediascore.php', cakedir + '/Model/Entity/Mediascore.php'),
	(sdir + '/Model/Table/MediascoresTable.php', cakedir + '/Model/Table/MediascoresTable.php'),
	(sdir + '/Template/Element/Mediascore/navbar.ctp', cakedir + '/Template/Element/Mediascore/navbar.ctp'),
	(sdir + '/Template/Mediascores/index.ctp', cakedir + '/Template/Mediascores/index.ctp'),
	(sdir + '/Template/Mediascores/add.ctp', cakedir + '/Template/Mediascores/add.ctp'),
	(sdir + '/Template/Mediascores/search.ctp', cakedir + '/Template/Mediascores/search.ctp'),
	(sdir + '/webroot/img/check.png', cakedir + '/../webroot/img/check.png'),
	(sdir + '/webroot/img/cross.png', cakedir + '/../webroot/img/cross.png'),
	(sdir + '/webroot/js/mediascore/mediascore.js', cakedir + '/../webroot/js/mediascore/mediascore.js')
]
