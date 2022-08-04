;prints  an input latter to its oppsite value

;print the type of input provided by the user       


.MODEL SMALL
.STACK 100H

.DATA 
 


.CODE MAIN
    
    
    MAIN PROC
        
        ;NEXT TWO LINE IS USED FOR USER INPUT
        MOV AH, 01H
        INT 21H 
        
        
        MOV BL,AL
        
        
        
        CMP BL, 61H                
        JL  UPPER
        
        
        CMP BL, 7AH        
        JG  EXIT
        
        JMP LOWER
        
     UPPER:
     
        CMP BL, 41H
        JL EXIT
        
        CMP BL,  5AH
        JG EXIT  
        
        OR BL,20H
        
        MOV DL,BL
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 02H  
        INT 21H
        jmp EXIT
             
     LOWER:
        
        
        AND BL, 0DFH
        
        MOV DL,BL
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 02H  
        INT 21H
        
     EXIT:
        
        
        
        
        ;THIS 2LINES IS USED FOR PRINTING
        MOV AH, 09H  
        INT 21H
        

    
    MAIN ENDP
    

END MAIN
 
 