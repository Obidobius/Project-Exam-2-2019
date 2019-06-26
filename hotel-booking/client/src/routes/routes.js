import Vue from 'vue'
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue)
//Pages
import HomePage from '../containers/pages/HomePage';
import AllHotelsPage from '../containers/pages/AllHotelsPage';
import ContactForm from '../components/ContactForm';
import ContactPage from '../containers/pages/ContactPage';
import HotelSpecificPage from '../containers/pages/HotelSpecificPage';
import CreateHotel from '../containers/pages/CreateHotel';
import AdminPage from '../containers/pages/AdminPage';
import LoggedPage from '../containers/pages/LoggedPage';
import AdminEnquiryPage from '../containers/pages/AdminEnquiryPage';
import AdminContactPage from '../containers/pages/AdminContactPage';


//Components
import Navigation from '../components/Navigation';
import AddEstablishment from '../components/AddEstablishment';
import Searchbar from '../components/Searchbar';
import HotelContainer from '../components/HotelContainer';
import LoginForm from '../components/LoginForm';
import HotelList from '../components/HotelList';

Vue.use(VueRouter);

    const router = new VueRouter({
    routes: [
                            //--------Pages--------//
    {
        path:'',
        name:'Home',
        component: HomePage
    },
    {
        path: '/Hotels', //all hotels
        name: 'AllHotelsPage',
        component: AllHotelsPage
    },
    {
        path: '/specific/:id', //Selected Hotel            //What the user see on the url
        name: 'HotelSpecificPage',                         //Keyword to link the page
        component: HotelSpecificPage,
        props:true
    },
    {
        path:'/establishment',
        name:'/establishment',
        component: AddEstablishment
    },
    {
        path:'/contactForm',
        name:'contactForm',
        component: ContactForm
    },
    {
        path:'/admin-contact',
        name:'/admin-contact',
        component: AdminContactPage
    },
    {
        path:'/Contact',
        name:'Contactpage',
        component: ContactPage
    },
    {
        path:'/admin-login',
        name:'/AdminPage',
        component: AdminPage,
    },
    {
        path:'/admin-logged',
        name:'/AdminLog',
        component:LoggedPage,
    },
    {
        path:'/admin-enquiry',
        name:'/AdminEnquiry',
        component:AdminEnquiryPage
    },
                    //--------Components--------//
    {
        path:'navigation',
        name:'Navigation',
        component: Navigation
    },
    {
        path:'/',
        name:'hotels',
        component: HotelList
    },
    {
        path:"",
        name:"LoginForm",
        component:LoginForm
    },
    {
        path:"/Create",
        name:"CreateHotel",
        component: CreateHotel
    },
    {
        path:"",
        name:"Searchbar",
        component: Searchbar
    },
    {
        path:"/test",
        name:"hotels",
        component: HotelContainer
    },
    ]
});

export default router;