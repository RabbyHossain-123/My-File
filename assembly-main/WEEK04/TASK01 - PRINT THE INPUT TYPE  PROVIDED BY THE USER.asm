;print the type of input provided by the user       


.MODEL SMALL
.STACK 100H

.DATA 
 
NUM:      DB "This is a Number", 0Dh, 0Ah, 24h                                                                       
UPP:      DB "This is a UpperCase Character", 0Dh, 0Ah, 24h    
LOW:      DB "This is a LowerCase Character",0DH, 0AH, 24H 
SPECIAL:  DB "This is a special  character",0DH, 0AH, 24H  
REGARDS:  DB "Thank You", 0DH, 0AH, 24H  



.CODE MAIN
    
    
    MAIN PROC
        
        MOV AX, @DATA   ;AX:- load the address of the data segment.
        MOV DS, AX      ;DS:- Segment Register.

        ;NEXT TWO LINE IS USED FOR USER INPUT
        MOV AH, 01H
        INT 21H
        
        CMP AL, CL
        
        
        CMP AL, 61H                
        JGE LOWER
        
        
        CMP AL, 41H        
        JGE UPPER
      
        
        CMP AL, 30H
        JGE NUMBER
        

                     
     NUMBER:
     
        MOV DX, NUM
        JMP EXIT        
     
     
     UPPER:
     
        MOV DX, UPP
        JMP EXIT
     
     LOWER:
        
        MOV DX, LOW
        JMP EXIT

     SPECIAL_CHAR:
        
        MOV DX, SPECIAL
        JMP EXIT

     EXIT:
        
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 09H  
        INT 21H
        
        MOV DX, REGARDS
        
        MOV AH, 09H
        INT 21H  
     
        
    
    MAIN ENDP
    

END MAIN
 
 