;if AX<0 then put -1 in  BX




.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        MOV AH, 01H
        INT 21H
        
        
        MOV BL, AL
        AND BL, 0FH
        
        
        MOV AH, 02H
        MOV DL, BL
        INT 21H
        

        
         
    MAIN ENDP
    

END MAIN
 
 