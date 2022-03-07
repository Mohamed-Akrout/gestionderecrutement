import { Component, OnInit } from '@angular/core';
import { Condidat } from '../../models/condidat.model';
import { NgModule } from '@angular/core';
import { DataService } from '../../service/data.service';

@Component({
  selector: 'app-formulaire',
  templateUrl: './formulaire.component.html',
  styleUrls: ['./formulaire.component.css']
})
export class FormulaireComponent implements OnInit {

  condidat = new Condidat();
  selectedType = 'openType';

onChange(event) {
  this.selectedType = event.target.value;
}
  constructor( private dataService:DataService ) { }


  ngOnInit(): void {
  }

  insertData(){
    // console.log('hello');
    this.dataService.insertData(this.condidat).subscribe( res => {
      console.log(res);
      // this. getCondidatData();
    })
  }
}
