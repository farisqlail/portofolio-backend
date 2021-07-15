
import Home from '../views/Home'
import Blog from '../views/Blog'
import Kontak from '../views/Kontak'
import Portofolio from '../views/Portofolio'

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },

        {
            path: '/blog',
            name: 'pages.blog',
            component: Blog
        },

        {
            path: '/kontak',
            name: 'pages.kontak',
            component: Kontak
        },

        {
            path: '/portofolio',
            name: 'pages.portofolio',
            component: Portofolio
        },
    ]
}