;print hello world five times and then print bye world. 
;Hint: unconditional CMP, conditional JE, JNE instruction.




.MODEL SMALL
.STACK 100H

.DATA

MSG:    DB "HELLO WORLD", 0Dh, 0Ah, 24h
MSG2:   DB "BYE WORLD",0DH, 0AH, 24H


.CODE MAIN
    
    MAIN PROC
        
        MOV AX, @DATA
        MOV DS, AX
        
        MOV BX, 0H
    
    START:
    
        MOV DX, MSG
        MOV ah, 09h ;THIS 2LINES IS USED FOR PRINTING 
        INT 21h
    
        INC	BX
        CMP	BX, 5H
        JE EXIT
        JNE START
        
    EXIT:
        
        MOV DX, MSG2
        MOV ah, 09h ;THIS 2LINES IS USED FOR PRINTING 
        INT 21h
    
    
    
    MAIN ENDP
    
 END MAIN
 
 