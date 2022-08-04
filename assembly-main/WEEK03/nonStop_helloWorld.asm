;print nonStop hello world. hint: unconditional jump an lebel instructions.




.MODEL SMALL
.STACK 100H

.DATA

MSG:    DB "HELLO WORLD", 0Dh, 0Ah, 24h
MSG02:  DB '5H', 0DH, 0AH, 24H


.CODE MAIN
    
    MAIN PROC
        
        MOV AX, @DATA
        MOV DS, AX
    
    HELLO_WORLD:
    
        MOV DX, MSG 
        
        JMP PRINT
    
    
    NUMBER:
        
        MOV DX, MSG02
        
        JMP PRINT
        
        JMP HELLO_WORLD
        
        
    PRINT:

        ;THIS 2LINES IS USED FOR PRINTING THE CONTENT OF DX
        MOV AH, 09H
        INT 21H
        JMP NUMBER
    
    
    JMP HELLO_WORLD ;GO TO THE CALLED FUNCTION/PROCEDURE AGAIN, AGAIN: IN A LOOP
    
    MAIN ENDP
    
 END MAIN
 
 