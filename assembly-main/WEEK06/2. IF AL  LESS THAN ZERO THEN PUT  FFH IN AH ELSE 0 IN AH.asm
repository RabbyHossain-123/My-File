;IF AL<0 then put FFh in AH else put 0 in AH



.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        MOV AL, -2
        
        CMP AL, 0
        
        JNLE ELSE       ;JUMP TO ELSE
        
        MOV AH, 0FFH    ;EXECUTE IF 
        
        JMP END_IF      ;END THE PROGRAM TO AVOID ELSE
        
        
        ELSE:           ;EXECUTE ELSE
        
        MOV AH, 0
        
        END_IF:
        
        
         
    MAIN ENDP
    

END MAIN
 
 