#include<windows.h>
#include <GL/glut.h>
#include <stdlib.h>
#include <math.h>

#define PI 3.1416
#define slice 600


static GLfloat spin = 0.0;

static float	tx	=  0.0;
static float	ty	=  0.0;

/*static float tx_1=0.0;//body
static float ty_1=-10.0;


static float tx_2=6.0;//right hand
static float ty_2=-5.0;



static float tx_3=-6.0;//left hand
static float ty_3=-5.0;





static float tx_4=-3.0;//upper head1
static float ty_4=17.0;


static float tx_5=3.0;//upper head2
static float ty_5=17.0;

static float tx_8=0.0;//middle body
static float ty_8=-9.0;

static float tx_6=-12.0;//right eye glASS black
static float ty_6=13.0;

static float tx_16=-12.0;//right eye glass blue
static float ty_16=13.0;

static float tx_17=-12.0;//right eye glass white
static float ty_17=13.0;

//static float tx_7=-14.5;//left eye
//static float ty_7=9.7;

static float tx_9=0.0;//nose
static float ty_9=13.0;

static float tx_10=-3.0;//right leg
static float ty_10=-32.5;

static float tx_11=3.0;//left leg
static float ty_11=-32.5;

static float tx_12=-16.0;//p1 translate
static float ty_12=0.0;

static float tx_13=40.0;//p2 translate
static float ty_13=0.0;

static float tx_7=-14.5;//left eye glass
static float ty_7=9.7;

static float tx_14=-14.5;//left eye glass
static float ty_14=9.7;

static float tx_15=-14.5;//left eye glass
static float ty_15=9.7;

static float tx_18=-11.0;//left eye glass line
static float ty_18=13.0;

static float tx_19=-11.0;//left eye glass line
static float ty_19=13.0;



//static float TX=9.5;//eye glass translate
//static float TY=2.7;

//static float tx_7=-14.5;//left eye
//static float ty_7=9.7;*/

void circle(float radius_x, float radius_y)
{
	int i = 0;
	float angle = 0.0;

	glBegin(GL_POLYGON);

		for(i = 0; i < slice; i++)
		{
			angle = 2 * PI * i / slice;
			glVertex3f (cos(angle) * radius_x, sin(angle) * radius_y, 0);
		}

	glEnd();
}

void display(void)
{
    glClear(GL_COLOR_BUFFER_BIT);

    glPushMatrix();





   glPushMatrix();//sky blue rectangle
       glColor3f(0.18,0.35,0.52);
       glBegin(GL_POLYGON);
          glVertex2d(-100,700);
          glVertex2d(-100,-20);
          glVertex2d(100,-20);
          glVertex2d(100,700);
       glEnd();
    glPopMatrix();





//footer ice
    glPushMatrix();
    //glScaled(0.5,0.5,0);
    //glTranslatef(0,-60,0);
    glColor3f(0.77, 0.84, 0.93);
    glBegin(GL_QUADS);

        glVertex2d(-100, -20);

        glVertex2d(-100, -74);

        glVertex2d(100, -74);

        glVertex2d(100, -20);
    glEnd();
    glPopMatrix();

    //hill 1
    glColor3f(0.1, 0.84, 0.93);
    glBegin(GL_TRIANGLES);

        glColor3f(0.1, 0.84, 0.80);glVertex2d(-100, -20);

        glColor3f(0.77, 0.84, 0.92);glVertex2d(-30, -20);

         glColor3f(0.54, 0.69, 0.85);glVertex2d(-45, 20);


    glEnd();
    glPopMatrix();

    //hill 2

    glBegin(GL_TRIANGLES);

        glColor3f(0.1, 0.84, 0.80);glVertex2d(-55, -20);

         glColor3f(0.77, 0.84, 0.92);glVertex2d(-10, -20);

         glColor3f(0.54, 0.69, 0.85);glVertex2d(-24.5, 20);


    glEnd();
    glPopMatrix();

    //hill 3
    glColor3f(0.1, 0.84, 0.93);
    glBegin(GL_TRIANGLES);

        glColor3f(0.1, 0.84, 0.80);glVertex2d(-50.5, -20);

        glColor3f(0.77, 0.84, 0.92);glVertex2d(15, -20);

        glColor3f(0.54, 0.69, 0.85);glVertex2d(0.7, 20);


    glEnd();
    glPopMatrix();

    //sun
    glPushMatrix();
    glTranslatef(25,25,0);
    glColor3f(1, 1, 1);
    circle(6,8);
    glPopMatrix();




    //penguin


    glPushMatrix();

    glPushMatrix();  // Draws The Head
	glColor3f(0.0, 0.0, 0.0);
	glTranslatef(tx,ty+2,0);
	circle(5.5,7.5);
	glPopMatrix();





	glPushMatrix(); // Draws The Body
	glColor3f(0.0, 0.0, 0.0);
	glTranslatef(tx,ty-20,0);
	circle(6,18);

	glPopMatrix();


	glPushMatrix(); // Draws The Right Hand
	        glRotatef(30, 0, 0, 1);
           glColor3f(0.0, 0.0, 0.0);
           glTranslatef(tx+0.5,ty-14.5,0);
	       circle(3,11);
            //glScaled(2, 1, 0);

	glPopMatrix();



	glPushMatrix(); // Draws The Left Hand
	        glRotatef(-30, 0, 0, 1);
           glColor3f(0.0, 0.0, 0.0);
           glTranslatef(tx-0.5,ty-15,0);
	       circle(3,11);
            //glScaled(2, 1, 0);

	glPopMatrix();

     glPushMatrix();  // Draws The upper Head1
	glColor3f(1.0, 1.0, 1.0);
	glTranslatef(tx-1.9,ty+2,0);
	circle(2.5,4.5);
	glPopMatrix();


   glPopMatrix();

     glPushMatrix();  // Draws The upper Head2
	glColor3f(1.0, 1.0, 1.0);
	glTranslatef(tx+2,ty+2,0);
	circle(2.5,4.5);
	glPopMatrix();


    glPushMatrix(); // Draws The middle Body
	glColor3f(1.0, 1.0, 1.0);
	glTranslatef(tx,ty-18,0);
	circle(5,17);

	glPopMatrix();

	glPushMatrix(); // Draws The Right Eye
          //glRotatef(-50, 0, 0, 1);
           glColor3f(0.0, 0.0, 0.0);
           glTranslatef(tx-2,ty+3,0);
	       circle(1,1);
            //glScaled(2, 1, 0);

	glPopMatrix();


	glPushMatrix(); // Draws The Left Eye
	       // glRotatef(-50, 0, 0, 1);
           glColor3f(0.0, 0.0, 0.0);
           glTranslatef(tx+2,ty+3,0);
	       circle(1,1);
            //glScaled(2, 1, 0);

	glPopMatrix();

	glPushMatrix(); // Draws The nose
         glTranslated(tx,ty-0.5,0);
	       glColor3f(0.9,0.5,0);
	       glBegin(GL_TRIANGLES);
	          glVertex2d(1,1);
	          glVertex2d(-1,1);
	          glVertex2d(0,-1);
	       glEnd();

	glPopMatrix();

	glPushMatrix(); // Draws The Right leg
          //glRotatef(-50, 0, 0, 1);
           glColor3f(0.9, 0.5, 0.0);
           glTranslatef(tx+2.5,ty-39,0);
	       circle(1.5,2.5);
            //glScaled(2, 1, 0);

	glPopMatrix();

	glPushMatrix(); // Draws The left leg
          //glRotatef(-50, 0, 0, 1);
           glColor3f(0.9, 0.5, 0.0);
           glTranslatef(tx-2.5,ty-39,0);
	       circle(1.5,2.5);
            //glScaled(2, 1, 0);

	glPopMatrix();


//mAIN POP
   glPopMatrix();
	glFlush();
}

void init(void)
{
	glClearColor (0.0, 0.0, 0.0, 0.0);
	glOrtho(-50.0, 50.0, -50.0, 50.0, -50.0, 50.0);
}






int main()
{
	glutInitDisplayMode (GLUT_SINGLE | GLUT_RGB);
	glutInitWindowSize (850, 700);
	glutInitWindowPosition (0, 0);
	glutCreateWindow ("Translating Circle");
	init();
	glutDisplayFunc(display);
//	glutKeyboardFunc(my_keyboard);
	//glutSpecialFunc(spe_key);//up,down,left,right
	//glutMouseFunc(my_mouse);

	glutMainLoop();
	return 0;   /* ANSI C requires main to return int. */
}


