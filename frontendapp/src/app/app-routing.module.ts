import { Component, NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './admin/login/login.component';
import { RegisterComponent } from './admin/register/register.component';
import { AuthGuard } from './auth.guards';
import { HomeComponent } from './home/home.component';
import { DashboardComponent } from './admin/dashboard/dashboard.component';
import { FormulaireComponent } from './condidat/formulaire/formulaire.component';

const routes: Routes = [
  {path:'', component:DashboardComponent, canActivate : [AuthGuard]},
  {path:'login', component:LoginComponent},
  {path:'register', component:RegisterComponent},
  {path:'form', component:FormulaireComponent},
  {path:'dashboard', component:DashboardComponent},
  


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
