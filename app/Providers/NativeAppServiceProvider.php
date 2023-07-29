<?php

namespace App\Providers;

use Native\Laravel\Facades\ContextMenu;
use Native\Laravel\Facades\Dock;
use Native\Laravel\Facades\Window;
use Native\Laravel\GlobalShortcut;
use Native\Laravel\Menu\Menu;
use Native\Laravel\Facades\MenuBar;


class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {


        // MenuBar::create()
        //     ->icon(storage_path('app/menuBarIconTemplate.png'))
        //     // ->label("Open Your Site")
        //     ->width(400)
        //     ->route('home')
        //     ->showDockIcon();

        // GlobalShortcut::key('Option+t')
        //     ->event(\App\Events\MyEvent::class)
        //     ->register();


        Window::open()
            ->width(400)
            ->route('home')
            ->height(400)
            ->rememberState()
            ->developerTools();

        /**
            Dock::menu(
                Menu::new()
                    ->event(DockItemClicked::class, 'Settings')
                    ->submenu('Help',
                        Menu::new()
                            ->event(DockItemClicked::class, 'About')
                            ->event(DockItemClicked::class, 'Learn More…')
                    )
            );

            ContextMenu::register(
                Menu::new()
                    ->event(ContextMenuClicked::class, 'Do something')
            );

            GlobalShortcut::new()
                ->key('CmdOrCtrl+Shift+I')
                ->event(ShortcutPressed::class)
                ->register();
         */
    }
}
