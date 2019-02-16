import { Component, OnInit, ViewChild, Injectable } from '@angular/core';
import { MatSidenav } from '@angular/material';
import { SidenavService } from 'src/app/shared/services/sidenav.service';

@Component({
  selector: 'app-sidenav',
  templateUrl: './sidenav.component.html',
  styleUrls: ['./sidenav.component.css']
})

export class SidenavComponent implements OnInit {

  @ViewChild('sidenav') private sidenav: MatSidenav;

  constructor(private sidenavService: SidenavService) {
  }

  ngOnInit(): void {
    this.sidenavService.setSidenav(this.sidenav);
    this.sidenavService.setIcon('menu');
  }

  close(): void {
    this.sidenavService.close();
  }

  toggle(): void {
    this.sidenavService.toggle();
  }

  onSideNavScroll(event) { event.stopPropagation(); }

}
