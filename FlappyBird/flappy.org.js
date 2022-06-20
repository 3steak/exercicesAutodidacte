var bird, sky, groupe_tuyaux, etat, restart, score;

bird = createSprite(50, 200);
bird.setAnimation("bird");
bird.scale = 0.15;
bird.setCollider("circle", 0, 0, 150);

sky = createSprite(200, 200);
sky.setAnimation("sky");
sky.scale = 0.8;
sky.depth = 0;

score = 0;

groupe_tuyaux = createGroup();
etat = "start";

restart = createSprite(200, 200);
restart.setAnimation('restart');
restart.scale = 0.4;
function draw() {

    if (etat === 'start') {
        bird.y = 200
        restart.visible = false;
        score = 0;
        if (keyDown("space")) {
            etat = "play";
        }
    }
    if (etat === 'play') {
        //jump 
        if (keyDown("space")) {
            bird.velocityY = -15;
        }
        //gravity
        bird.velocityY += 2;

        //generer tuyau
        tuyaux();


        if (bird.isTouching(groupe_tuyaux)) {
            bird.velocityY = 0;
            groupe_tuyaux.setVelocityXEach(0);
            groupe_tuyaux.setLifetimeEach(-1);
            etat = 'game over';
        }
    }
    if (etat === 'game over') {

        restart.visible = true;

        if (mousePressedOver(restart)) {
            groupe_tuyaux.destroyEach()
            etat = 'start';
        }
    }

    drawSprites();

    textSize(40);
    text(score, 350, 50);

}

function tuyaux() {
    if (World.frameCount % 60 === 0) {
        var tuyau1, tuyau2;
        score += 1;


        tuyau1 = createSprite(600, 200);
        tuyau1.setAnimation("pipe");
        tuyau1.scale = 0.3;
        tuyau1.y = 350 + Math.random() * 200;
        tuyau1.lifetime = 200;
        tuyau1.velocityX = -5;
        groupe_tuyaux.add(tuyau1);
        //hitbox du tuyau
        tuyau1.setCollider("rectangle", 0, 0, 300, 1200);

        tuyau2 = createSprite(600, 200);
        tuyau2.setAnimation("pipe");
        tuyau2.scale = 0.3;
        tuyau2.y = tuyau1.y - 500;
        tuyau2.lifetime = 200;
        tuyau2.rotation = 180;
        tuyau2.velocityX = -5;
        groupe_tuyaux.add(tuyau2);
        tuyau2.setCollider("rectangle", 0, 0, 300, 1200);
    }
}









