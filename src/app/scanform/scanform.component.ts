import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-scanform',
  templateUrl: './scanform.component.html',
  styleUrls: ['./scanform.component.css']
})
export class ScanformComponent implements OnInit {

  
  codes = [];

  constructor() { }

  ngOnInit() {
  }

  onSubmit(barcode: string, field: HTMLInputElement){
    //console.log(barcode.length);
    if(barcode.length === 14){
      this.codes.push(barcode);
      console.log(barcode);
      field.value = '';
    }
    //this.codes.push()
  }

}
