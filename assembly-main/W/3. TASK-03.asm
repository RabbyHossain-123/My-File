

.MODEL SMALL
.STACK 100H

.DATA


.CODE MAIN
    
    MAIN PROC
        
        MOV CX, 0
        
        MOV AH, 01H
        INT 21H
        
            
            WHILE:
            
            INT 21H
            MOV DL, AL
            
            CMP DL, 0DH
            
            JE END_W
            
            JMP INSERT_TO_STACK
                
                    
                    INSERT_TO_STACK:
                
                    PUSH DX
                    INC  CX
                    JMP WHILE
                                  
                
            END_W:
            
            MOV AH, 02H
            
            MOV DL, 0DH
            INT 21H
            
            MOV DL, 0AH
            INT 21H
            
            PRINT:
            POP  DX
            INT  21H
            LOOP PRINT


            
                
                
        
        
        

        
         
    MAIN ENDP
    

END MAIN
 
 