<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 11.02.15
 * Time: 22:34
 */

class Vote{
    var $fname = 'result.dat';
    var $file = null;
    var $votes = null;

    function Vote(){
        if(!file_exists($this->fname)){
            $this->votes = [0,0,0,0,0];
            $this->writeVotes();
        }else{
            $this->file = fopen($this->fname,'r');
            $this->votes = $this->readVotes();
            $this->defineVotes();
            fclose($this->file);
            $this->writeVotes();
        }
    }

    function readVotes(){
        $tempVotes = [];
        while(!feof($this->file)){
            array_push($tempVotes,((int)fgets($this->file)));
        }
        return count($tempVotes)==5?$tempVotes:[0,0,0,0,0];
    }

    function defineVotes(){
        switch($_REQUEST['vote']){
            case 1:
                $this->votes[0]+=1;
                break;
            case 2:
                $this->votes[1]+=1;
                break;
            case 3:
                $this->votes[2]+=1;
                break;
            case 4:
                $this->votes[3]+=1;
                break;
            case 5:
                $this->votes[4]+=1;
                break;
        }
    }

    function writeVotes(){
        $this->file = fopen($this->fname,'w');
        for($i=0;$i<count($this->votes)-1;$i++){
            fputs($this->file,$this->votes[$i]."\n");
        }
        fputs($this->file,$this->votes[count($this->votes)-1]);
        fclose($this->file);
    }

}

class VoteHandler{
    var $fname = 'result.dat';

    function getValues(){
        $tempVotes = [];
        if(file_exists($this->fname)){
            $file = fopen('result.dat','r');
            while(!feof($file)){
                array_push($tempVotes,((int)fgets($file)));
            }
            fclose($file);
        }
        return count($tempVotes)==5?$tempVotes:[0,0,0,0,0];
    }

    function rmFile(){
        if(file_exists($this->fname)){
            if(unlink($this->fname)){
                return true;
            }
        }else{
            throw new E_ERROR;
        }
    }
}