;if AX<0 then put -1 in  BX




.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        MOV AX, -1
        
        CMP AX, 0
        
        JNLE END_IF
        
        NEG AX
        MOV BX, AX
        
        END_IF:
        
        MOV AH, 4CH
        INT 21H
        
         
    MAIN ENDP
    

END MAIN
 
 