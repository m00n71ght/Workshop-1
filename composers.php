<?php

View::composer('core::partials.sidebar-nav', 'Modules\Workshop\Composers\SidebarViewComposer');
View::composer('workshop::admin.workbench.tabs.migrate', 'Modules\Workshop\Composers\MigrateViewComposer');