;print e if AL contain 2 or 4 or  print o  if AL contail 1 or 3


.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        
        MOV AL, 4
        
        
        
        START_CASE:                

        CMP AL, 1          
        JE DISPLAY_ODD
        
        CMP AL, 3  
        JE DISPLAY_ODD
        
        CMP AL, 2          
        JE DISPLAY_EVEN
        
        CMP AL, 4  
        JE DISPLAY_EVEN
        
        
        
            DISPLAY_ODD:    ;ODD
            
            MOV AH, 02H
            MOV DL, 'O'
            INT 21H
            JMP END_CASE        
                 
        
            DISPLAY_EVEN:  ;EVEN
            
            MOV AH, 02H
            MOV DL, 'E'
            INT 21H
        
        
        
        END_CASE:     ;end_if
                
        
       
        
         
    MAIN ENDP
    

END MAIN
 
 