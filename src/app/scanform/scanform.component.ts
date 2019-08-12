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
    console.log(barcode);
    if(barcode){
      this.codes.push(barcode);
      field.value = '';
    }
    //this.codes.push()
  }

}
