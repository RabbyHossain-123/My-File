;prints  an input latter to its oppsite value

;print the type of input provided by the user       


.MODEL SMALL
.STACK 100H

.DATA 
 
X: DB 20H, 0Dh, 0Ah, 24h
C: DB ?
;NEW_LINE:  DB 0AH, 0DH



.CODE MAIN
    
    
    MAIN PROC
        
        MOV AX, @DATA   ;AX:- load the address of the data segment.
        MOV DS, AX      ;DS:- Segment Register.

        
        MOV BL,AL
        
        ;NEXT TWO LINE IS USED FOR USER INPUT
        MOV AH, 01H
        INT 21H
        
        CMP AL, CL
        
        
        CMP AL, 61H                
        JGE LOWER
        
        
        CMP AL, 41H        
        JGE UPPER
        
     UPPER:
     
        ADD AL,BL
        
        MOV DL,AL
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 09H  
        INT 21H
             
     LOWER:
        
        SUB AL,BL
        
        MOV DL,AL
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 09H  
        INT 21H
        
     EXIT:
        
        
        
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 09H  
        INT 21H
        

    
    MAIN ENDP
    

END MAIN
 
 