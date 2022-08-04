;CL contains the value 5. take integer from user. compare the value CL
;show wheather the input value is less or greater or equal




.MODEL SMALL
.STACK 100H

.DATA 

X       DB 5

MSG:    DB "EQUAL TO FIVE", 0Dh, 0Ah, 24h
MSG2:   DB "GREATER THAN FIVE",0DH, 0AH, 24H
MSG3:   DB "LESS THAN FIVE",0DH, 0AH, 24H



.CODE MAIN
    
    MAIN PROC
        
        
        MOV AX, @DATA   ;AX:- load the address of the data segment.
        MOV DS, AX      ;DS:- Segment Register.
        
        ;counter register
        MOV CL, '5'
    
        ;NEXT TWO LINE IS USED FOR USER INPUT
        MOV AH, 01H
        INT 21H
        
        ;CMP:- compare register
        CMP	AL, CL
        
        ;JE:- jump equal
        JE EQUAL
        
        ;JG:- jump grater
        JG LARGE                    
        
        ;JL:- jump lower
        JL SMALL
        
        
     EQUAL:
     
        MOV DX, MSG

        JMP EXIT
        
        
                
     LARGE:
        
        MOV DX, MSG2

        JMP EXIT
                   
     
     SMALL:
     
        MOV DX, MSG3

        JMP EXIT
        
     EXIT:
     
         ;this code of block can be written in above three jump points;
         ;thus we need to write down same code for three times
         ;instead we make a common jump point and reduce the line of codes 
         
        ;THIS 2LINES IS USED FOR PRINTING
        MOV ah, 09h  
        INT 21h  
        

    
    
    MAIN ENDP
    
 END MAIN
 
 