;read a input, check ifinput is >A and <Z without using nested if and if true then Display



.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        ;input
        MOV AH, 01H
        INT 21H
        
        ;store
        MOV DL, AL
        
        IF:        

        CMP DL, 'A'  ;greater than  A or not
        
        JNGE ELSE
        
        CMP DL, 'Z'  ;less than  Z or not
        
        JNLE ELSE
        
        JMP DISPLAY
                
        DISPLAY:
        
        MOV AH, 02H
        INT 21H;
        ;JMP END_IF
        
        
        ELSE:
        
        
        
       
        
         
    MAIN ENDP
    

END MAIN
 
 