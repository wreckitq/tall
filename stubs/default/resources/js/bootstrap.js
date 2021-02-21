import 'alpinejs';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

window.initAlpine = function () {
    function setItemToLocalStorage(name, value) {
        window.localStorage.setItem(name, value)
    }

    function getItemFromLocalStorage(name, defaultValue) {
        // if user already changed the theme, use it
        if (window.localStorage.getItem(name)) {
            return JSON.parse(window.localStorage.getItem(name))
        }

        // else return their preferences
        return defaultValue
    }

    function getThemeFromLocalStorage() {
        let defaultValue = (
            !!window.matchMedia &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        );

        return getItemFromLocalStorage('dark', defaultValue)
    }

    const kitchenSink = document.querySelector('#kitchen-sink-menu');

    if (kitchenSink && kitchenSink.dataset.isActive) {
        setItemToLocalStorage('isKitchenSinkMenuOpen', true);
    } else {
        setItemToLocalStorage('isKitchenSinkMenuOpen', false);
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark
            setItemToLocalStorage('dark', this.dark)
        },
        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen
        },
        closeSideMenu() {
            this.isSideMenuOpen = false
        },
        isNotificationsMenuOpen: false,
        toggleNotificationsMenu() {
            this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
        },
        closeNotificationsMenu() {
            this.isNotificationsMenuOpen = false
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false
        },
        isKitchenSinkMenuOpen: getItemFromLocalStorage('isKitchenSinkMenuOpen', false),
        toggleKitchenSinkMenu() {
            this.isKitchenSinkMenuOpen = !this.isKitchenSinkMenuOpen
            setItemToLocalStorage('isKitchenSinkMenuOpen', this.isKitchenSinkMenuOpen)
        },
        // Modal
        isModalOpen: false,
        trapCleanup: null,
        openModal() {
            this.isModalOpen = true
            this.trapCleanup = focusTrap(document.querySelector('#modal'))
        },
        closeModal() {
            this.isModalOpen = false
            this.trapCleanup()
        },
    }
}
