/**
 * Created by piggy on 16/1/10.
 */
var app = require('koa')();
var router = require('koa-router')();

router.get('/', function *(next) {});

app
    .use(router.routes())
    .use(router.allowedMethods());

app.listen(3000);