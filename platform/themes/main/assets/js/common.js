import Page from "./page/home";
import initCounter from "./components/counter";
import copy from './components/copy'

$(document).ready(function() {
    Page.default();
    Page.initMap();

    initCounter();
    copy();
});
