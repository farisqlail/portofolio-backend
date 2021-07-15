
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
            name: 'blog',
            component: Blog
        },

        {
            path: '/kontak',
            name: 'kontak',
            component: Kontak
        },

        {
            path: '/portofolio',
            name: 'portofolio',
            component: Portofolio
        },
    ]
}