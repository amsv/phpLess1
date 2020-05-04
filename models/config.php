<?php
const DIR_PHOTO_BIG = './images/';
const DIR_PHOTO_SMALL = './images/small/';

const SERVER = "localhost";
const DB = "dbMarket";
const LOGIN = "root";
const PASS = "root";

$link = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");
