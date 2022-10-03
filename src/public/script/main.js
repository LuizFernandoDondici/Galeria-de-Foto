
import { saveImg } from "./ajax/ajax-photo.js";
import { openImg, closeImg } from "./zoom-img/zoom-img.js";

const form = $('#form-img')[0];
const listImg = document.querySelectorAll('#icon-img');

saveImg(form);
openImg(listImg);
closeImg();