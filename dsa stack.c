#include<stdio.h>
#include<stdlib.h>
#define SIZE 5
struct stack
{
	int item[SIZE];
	int top;
};
struct stack s;
void push (struct stack *s, int num)
{
	if (s->top==(SIZE-1))
	{
		printf("\n The stack is full.");
	}
	else
	{
		s->top++;
		s->item[s->top]=num;
	}
 } 
 void pop(struct stack *s)
 {
 	int dt;
 	if(s->top==-1)
 	{
 		printf("\n Stack is empty.");	 }
	 else
	 {
	 	dt=s->item[s->top];
	 	s->top--;
	 	printf("\n The poped item is %d",dt);
	 }
 }
 
 void display(struct stack *s)
 {
 	int i;
 	if(s->top==-1)
 	{
 		printf("\n Stack is empty.");
 		exit(0);
	 }
	 else
	 {
	 	printf("\n The content of stack is: \n");
	 	for(i=s->top; i>=0; i--)
	 	{
	 		printf("\n |%d|",s->item[i]);
		 }
	 }
 }
 
 int main()
 {
 	int num, choice;
 	s.top=-1;
 	printf("1. PUSH \n 2. POP \n 3. DISPLAY \n 4. EXIT");
	 while(1)
	 {
	 	printf("Enter your choice:");
	 	scanf("%d", &choice);
	 	switch(choice)
	 	{
	 		case 1:
	 			printf("\n Enter the number:");
	 			scanf("%d", &num);
	 			push(&s, num);
	 			break;
	 			case 2:
	 				pop(&s);
	 				break;
	 				case 3:
	 					display(&s);
	 					break;
	 					case 4:
	 						exit(0);
		 }
	   }  
	   return 0;
}
