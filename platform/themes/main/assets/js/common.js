import Page from "./page/home";
import Introduce from "./page/introduce";
import copy from './components/copy'

$(document).ready(function() {
    Page.default();
    Page.initMap();
    copy();
});
